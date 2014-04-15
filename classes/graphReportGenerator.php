<?php

/* Include all the classes */
include(dirname(__FILE__)."/../libraries/pchart/class/pDraw.class.php");
include(dirname(__FILE__)."/../libraries/pchart/class/pImage.class.php");
include(dirname(__FILE__)."/../libraries/pchart/class/pData.class.php");

use \PDO;
use \Exception;
use \PDOException;

/**
 * Generate graphs with required data
 *
 * This class generates charts for specified users.
 *
 * @author Marcin Ławniczak <marcin.safmb@gmail.com>
 * @package DziennikLogin
 * @version 0.1
 * @return image
 *
 * 
 */
class graphReportGenerator {

    /**
     * The handle to PDO object
     * @var resource
     */
    private $pdoHandle;

    /**
     * The ID of currently processed user
     * @var string
     */
    private $userId;
    
    /**
     * The subject of chart to be generated
     * @var string
     */
    private $chartSubject = NULL;
    
    /**
     * Self-explanatory
     * @var string
     */
    private $databaseHost;

    /**
     * Self-explanatory
     * @var string
     */
    private $databaseName;

    /**
     * Self-explanatory
     * @var string
     */
    private $databaseUsername;

    /**
     * Self-explanatory
     * @var string
     */
    private $databasePassword;
        
    /**
     * Self-explanatory
     * @var array
     */
    private $chartData;
            
    /**
     * Self-explanatory
     * @var array
     */
    private $chartDataConverted;
    
    /**
     * Self-explanatory
     * @var string
     */
    private $currentTrimester = NULL;
    
    /**
     * Trimester for which the chart is generated
     * @var string
     */
    private $chartTrimester;
    
    /**
     * Array with subjects which the user has
     * @var array
     */
    private $userSubjects;
    
    
    public function __construct($databaseHost, $databaseName, $databaseUsername, $databasePassword) {
        $this->databaseHost = $databaseHost;
        $this->databaseName = $databaseName;
        $this->databaseUsername = $databaseUsername;
        $this->databasePassword = $databasePassword;
        try {
            $this->pdoHandle = new \PDO("mysql:host=$this->databaseHost;dbname=$this->databaseName;charset=utf8", $this->databaseUsername, $this->databasePassword, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));
            $this->pdoHandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception('Błąd bazy danych:' . $e->getMessage());
        }
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }
    
    public function setChartSubject($chartSubject) {
        $this->chartSubject = $chartSubject;
    }
    
    public function setChartTrimester($chartTrimester) {
        $this->chartTrimester = $chartTrimester;
    }
    
     
    /**
     * Function to determine current trimester
     * 
     * Simply selects the gradeTrimester with the newest grade
     * 
     * @throws Exception
     * @return string
     * 
     */
    public function getCurrentTrimester(){
        try {
            $queryHandleSelect = $this->pdoHandle->prepare('SELECT gradeTrimester FROM grades WHERE gradeDownloadDate = (SELECT MAX(gradeDownloadDate) FROM grades)');
            $queryHandleSelect->execute();
            $this->currentTrimester = $queryHandleSelect->fetch();
        } catch (PDOException $e) {
            throw new Exception('Błąd bazy danych:' . $e->getMessage());
        }
        return $this->currentTrimester[0];
    }
    
    /**
     * Function to get list of grades
     * 
     * Simply selects the gradeTrimester with the newest grade
     * 
     * @throws Exception
     * @return string
     * 
     */
    public function getSubjectsArray(){
        try {
            $queryHandleSelect = $this->pdoHandle->prepare('SELECT DISTINCT subjectId FROM grades WHERE userId=:userId');
            $queryHandleSelect->bindParam(':userId', $this->userId);
            $queryHandleSelect->execute();
            $this->userSubjects = $queryHandleSelect->fetch();
        } catch (PDOException $e) {
            throw new Exception('Błąd bazy danych:' . $e->getMessage());
        }
        return $this->userSubjects;
    }

    private function getDataForChart() {
        try {
            $queryHandleSelect = $this->pdoHandle->prepare('SELECT gradeValue,gradeWeight FROM grades WHERE subjectId=:subjectId AND userId=:userId AND gradeTrimester = :gradeTrimester');
            $queryHandleSelect->bindParam(':userId', $this->userId);
            //bind trimester
            if($this->chartTrimester == NULL || $this->chartTrimester != 1 || $this->chartTrimester != 2 || $this->chartTrimester != 3){
                $queryHandleSelect->bindParam(':gradeTrimester', $this->currentTrimester); 
            }
            else{
                $queryHandleSelect->bindParam(':gradeTrimester', $this->chartTrimester); 
            }
            //bind subject
            if($this->chartSubject == NULL || !in_array($this->chartSubject, $this->userSubjects)){
                $queryHandleSelect->bindParam(':subjectId', $subjectId = 'subjectId'); 
            }
            else{
                $queryHandleSelect->bindParam(':subjectId', $this->chartSubject); 
            }
            $queryHandleSelect->execute();
            $this->chartData = $queryHandleSelect->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Błąd bazy danych:' . $e->getMessage());
        }
        //Convert array from database
        $this->chartDataConverted = array('1' => 0, '1.5' => 0, '2' => 0, '2.5' => 0, '3' => 0, '3.5' => 0, '4' => 0, '4.5' => 0, '5' => 0, '5.5' => 0, '6' => 0);
        foreach ($this->chartData as $val) {
            $this->chartDataConverted[$val['gradeValue']] = $this->chartDataConverted[$val['gradeValue']] + $val['gradeWeight'];
        }
    }
    
    private function generateChart() {
        /* Create your dataset object */
        $myData = new pData();

        /* Add data in your dataset */
        $myData->addPoints($this->chartDataConverted);
        $myData->addPoints(array(1, "1.5", 2, "2.5", 3, "3.5", 4, "4.5", 5, "5.5", 6), "Labels");
        $myData->setSerieDescription("Labels", "Oceny");
        $myData->setAbscissa("Labels");
        //$myData->setAxisName(0,"Waga/Ilość");
        /* Overlay with a gradient */

        /* Create a pChart object and associate your dataset */
        $myPicture = new pImage(700, 230, $myData);
        $myPicture->drawGradientArea(0, 0, 699, 299, DIRECTION_VERTICAL, array("StartR" => 240, "StartG" => 240, "StartB" => 240, "EndR" => 180, "EndG" => 180, "EndB" => 180, "Alpha" => 100));
        $myPicture->drawGradientArea(0, 0, 699, 299, DIRECTION_HORIZONTAL, array("StartR" => 240, "StartG" => 240, "StartB" => 240, "EndR" => 180, "EndG" => 180, "EndB" => 180, "Alpha" => 20));
        /* Add a border to the picture */
        $myPicture->drawRectangle(0, 0, 699, 229, array("R" => 0, "G" => 0, "B" => 0));
        /* Define the boundaries of the graph area */
        $myPicture->setGraphArea(60, 40, 670, 190);
        /* Choose a nice font */
        $fontPath = dirname(__FILE__).'/../libraries/pchart/fonts/pf_arma_five.ttf';
        $myPicture->setFontProperties(array("FontName" => "$fontPath", "FontSize" => 11));
        $myPicture->setShadow(TRUE, array("X" => 1, "Y" => 1, "R" => 0, "G" => 0, "B" => 0, "Alpha" => 10));
        /* Draw the scale, keep everything automatic */
        $myPicture->drawScale(array('Mode' => SCALE_MODE_START0));
        /* Create the per bar palette */ //as per http://ideone.com/vWSh6o nope
         $Palette = array("0" => array("R" => 255, "G" => 0, "B" => 0, "Alpha" => 100),//FF0000 don
              "1" => array("R" => 255, "G" => 51, "B" => 0, "Alpha" => 100),//FF3300 don
              "2" => array("R" => 255, "G" => 102, "B" => 0, "Alpha" => 100),//FF6600 don
              "3" => array("R" => 255, "G" => 153, "B" => 0, "Alpha" => 100),//FF9900 don
              "4" => array("R" => 255, "G" => 204, "B" => 0, "Alpha" => 100),//FFCC00 don
              "5" => array("R" => 255, "G" => 255, "B" => 0, "Alpha" => 100),//FFFF00 don
              "6" => array("R" => 204, "G" => 255, "B" => 0, "Alpha" => 100),//CCFF00 don
              "7" => array("R" => 153, "G" => 255, "B" => 0, "Alpha" => 100),//99FF00 don
              "8" => array("R" => 102, "G" => 255, "B" => 0, "Alpha" => 100),//66FF00 don
              "9" => array("R" => 51, "G" => 255, "B" => 0, "Alpha" => 100),//33FF00 don
              "10" => array("R" => 0, "G" =>255, "B" => 0, "Alpha" => 100)//00FF00 don
            );

        /* Draw the scale, keep everything automatic */
        $myPicture->drawBarChart(array("DisplayValues" => TRUE, "DisplayShadow"=>TRUE,"Rounded" => TRUE, "Surrounding" => 30,"OverrideColors"=>$Palette,"Draw0Line"=>TRUE));

        /* Build the PNG file and send it to the web browser */
        $myPicture->Stroke();
    }
    
    public function executeProcessing() {
        $this->getDataForChart();
        $this->generateChart();
    }

}
?>