<?php
//Gutscheinstatus neu 			gutschein wirde Erstellt aber noch nicht in der kassen importiert
//Gutscheinstatus kasse 		gutschein wurde ins kassensystem importiert
//Gutscheinstatus eingeloest  	gutschein wurde an der Kasse eingelöst.

echo "**************************************Class Test******************************************";
namespace OxidEsales\KatModul\Application\Controller\Admin;


//class produktkat extends produktkat_parent {

use \OxidEsales\Eshop\Application\Controller\Admin\AdminController;
use \OxidEsales\Eshop\Core\Registry;
use \OxidEsales\Eshop\Core\DatabaseProvider;
use stdClass;

class ArticleAttributeKat extends ArticleAttributeKat_parent
{
    
    
    /*
	public function getParameterval($feld)
	{
    
		$myConfig = $this->getConfig();
		$value =	oxConfig::getParameter($feld);

		return $value;
       
        
        
	}
    
     */
/* 
	public function produk2cat($pid)
	{
       
        

		$Motrradliste = array();
		$myConfig = $this->getConfig();
		$oDb = oxDb::getDb();

		// Motorrad Kategorieen lesen
		$query_mmarke = "select OXID,OXPARENTID,OXSORT,OXACTIVE,OXTITLE,OXDESC,OXKATTYPE  from oxcategories where OXKATTYPE = 'Marke' order by OXSORT ,OXTITLE";
		$amkat= oxDb::getDb()->Execute( $query_mmarke);
		if ($amkat != false && $amkat->recordCount() > 0)
		{
			while (!$amkat->EOF)
			{
				$oxmcatid		=	$amkat->fields[0];
				$oxmtitel		=	$amkat->fields[4];

				$query_mtype1 = "select OXID,OXPARENTID,OXSORT,OXACTIVE,OXTITLE,OXDESC,OXKATTYPE  from oxcategories where OXPARENTID = '$oxmcatid' order by OXSORT ,OXTITLE";
				$amtype1= oxDb::getDb()->Execute( $query_mtype1);
				if ($amtype1 != false && $amtype1->recordCount() > 0)
				{

					while (!$amtype1->EOF)
					{
						$amtype1id		=	$amtype1->fields[0];
						$amtype1titel	=	$amtype1->fields[4];

					//	$MotTypen[$amtype1id]["marke"] = $oxmtitel;
					//	$MotTypen[$amtype1id]["type1"] = $amtype1titel;

					//	$MotTypen[$amtype1id]["type2"] = "";

						//e2
						$query_mtype2 = "select OXID,OXPARENTID,OXSORT,OXACTIVE,OXTITLE,OXDESC,OXKATTYPE  from oxcategories where OXPARENTID = '$amtype1id' order by OXSORT ,OXTITLE";
						$amtype2= oxDb::getDb()->Execute( $query_mtype2);
						if ($amtype2 != false && $amtype2->recordCount() > 0)
						{
							while (!$amtype2->EOF)
							{
								$amtype2id		=	$amtype2->fields[0];
								$amtype2titel	=	$amtype2->fields[4];

								$MotTypen[$amtype2id]["marke"] = $oxmtitel;
								$MotTypen[$amtype2id]["type1"] = $amtype1titel;
								$MotTypen[$amtype2id]["type2"] = $amtype2titel;

								$amtype2->moveNext();
							}

						}
						else
						{
							$MotTypen[$amtype1id]["marke"] = $oxmtitel;
							$MotTypen[$amtype1id]["type1"] = $amtype1titel;
						}
						//e2

						$amtype1->moveNext();
					}
				}

				$amkat->moveNext();
			}
		}
			// Motorrad Kategorieen lesen


		//	$query_order= "select OXBARCODE,OXBRUTSUM,OXGVORLAGE,OXARTTEXT,OXGUTTEXT,OXUSERID,OXGUTNR,OXORDERDATE,OXARTID,OXID  from ox_gutscheinorder where oxorderid = '$oderid' && oxartid = '$artid' ";

		$query_p2cat= "select OXOBJECTID,OXCATNID  from oxobject2category where OXOBJECTID = '$pid' ";
//echo "query=".$query_p2cat;

		$ap2kat= oxDb::getDb()->Execute( $query_p2cat);
	$m1 = "";
		if ($ap2kat != false && $ap2kat->recordCount() > 0)
		{
			$i =0;
			while (!$ap2kat->EOF)
			{

				 $oxcatid		=	$ap2kat->fields[1];
				if($MotTypen[$oxcatid]["marke"])
				{

					$Motrradliste[$i]  = $MotTypen[$oxcatid]["marke"]."|".$MotTypen[$oxcatid]["type1"]."|".$MotTypen[$oxcatid]["type2"];
		
					$m1 = $MotTypen[$oxcatid]["marke"];

				//	$Motrradliste[$i]["marke"] = $MotTypen[$oxcatid]["marke"];
				//	$Motrradliste[$i]["type1"] = $MotTypen[$oxcatid]["type1"];
				//	$Motrradliste[$i]["type2"] = $MotTypen[$oxcatid]["type2"];
				}


				$ap2kat->moveNext();
			$i++;

			}

		}


     return $Motrradliste;


	}
 */   
    
 /*
	public function aManufa($mid)
	{
       
		$myConfig = $this->getConfig();
		$query_manuf= "select OXID,OXICON,OXTITLE from oxmanufacturers where OXID = '$mid' ";
		$manuf= oxDb::getDb()->Execute( $query_manuf);
		$amanu["titel"]		=	$manuf->fields[2];
		$amanu["icon"]		=	$manuf->fields[1];

	return $amanu;
        
        
	}
    */
/*
	public function SetSelKatType($mid)
	{
        
		$myConfig = $this->getConfig();
		//session für ausgewälte kategorie setzen


	//	$aManuFilter = oxSession::getVar( 'session_manufilter' );
		oxSession::setVar('session_kattype', $mid );

	//	return $amanu;
        
	}
    */
/*
	public function getSelKatType()
	{
        
		$myConfig = $this->getConfig();
		//session für ausgewälte kategorie lesen und titel zurückgeben


			$selkattype = oxSession::getVar( 'session_manufilter' );
		//oxSession::setVar( 'session_kattype', $mid );
		if($selkattype)
		{
			$query_katpye= "select OXID,OXTITLE,OXDESC from oxcategories where OXID = '$mid' ";
			$kattype = oxDb::getDb()->Execute( $query_katpye);
			$akattype["id"]			=	$kattype->fields[0];
			$akattype["titel"]		=	$kattype->fields[1];
			$akattype["desc"]		=	$kattype->fields[2];
		}


			return $akattype;
        
	}
    */
/*
	public function cpoySelKatSelKat($qartid,$zartid)
	{

		$myConfig = $this->getConfig();
		$oDb = oxDb::getDb();

		// Motorrad Kategorieen lesen
		$query_qkat = "select OXID,OXOBJECTID,OXCATNID  from oxobject2category where OXOBJECTID = '$qartid'  order by OXOBJECTID ";
		$aqkat= oxDb::getDb()->Execute( $query_qkat);
		if ($aqkat != false && $aqkat->recordCount() > 0)
		{
			$i =0;
			while (!$aqkat->EOF)
			{
				$oxtime = time();
				$oxqartid			=	$aqkat->fields[1];
				$oxqkatid			=	$aqkat->fields[2];

				$gxid=			oxUtilsObject::getInstance()->generateUID();
			//	$sQ = "insert into oxobject2category (OXID,OXOBJECTID,OXCATNID)  values  ('".$gxid."','".$zartid."','".$oxqkatid."')";
				$sQ = "insert into oxobject2category (OXID,OXOBJECTID,OXCATNID,OXTIME)  values  ('".$gxid."','".$zartid."','".$oxqkatid."','".$oxtime."')";
				$oDb->execute($sQ);



				$aqkat->moveNext();
			}

		}


	}
*/    
     /*
           
	public function copyselkatlist()
	{
    
		$myConfig = $this->getConfig();

		$varkopiekat=	oxConfig::getParameter('kopiekat');
		if($varkopiekat)
		{
			$varq=	oxConfig::getParameter('artselquelle');
			$varz=	oxConfig::getParameter('artselziel');

			$this->cpoySelKatSelKat($varq,$varz);
			 $katkopie[meldung] = "Kategoriezuordnung wurde kopiert!";
			$katkopie[zartid] = $varz;
			$katkopie[qartid] = $varq;

		}
		else{
			$katkopie[meldung] = "Produkt zum Kopieren wählen !";
			$katkopie[zartid] = "leer";
			$katkopie[qartid] = "leer";
		}

	//	$katkopie["meldung"] = "Test";
	return $katkopie;
        
        
	}
    */
    
/*
	public function copykatmitartlist($zkatid = "")
	{
        
		//kategorie artikelzuordnungen kopieren

		if($zkatid != "-1" && $zkatid != "")
		{
			$varcatq =	oxConfig::getParameter('katquelle');

			$myConfig = $this->getConfig();
			$oDb = oxDb::getDb();

		if($varcatq != "")
		{


			// Motorrad Kategorieen lesen
			$query_qartids = "select OXID,OXOBJECTID,OXCATNID  from oxobject2category where OXCATNID = '$varcatq'  order by OXOBJECTID ";
			$qartid= oxDb::getDb()->Execute( $query_qartids);



			if ($qartid != false && $qartid->recordCount() > 0)
			{
				$i =0;
				while (!$qartid->EOF)
				{
					$oxtime = time();
					$oxartid			=	$qartid->fields[1];
					$oxqkatid			=	$qartid->fields[2];

					$gxid=			oxUtilsObject::getInstance()->generateUID();
					//	$sQ = "insert into oxobject2category (OXID,OXOBJECTID,OXCATNID)  values  ('".$gxid."','".$zartid."','".$oxqkatid."')";
					$sQ = "insert into oxobject2category (OXID,OXOBJECTID,OXCATNID,OXTIME)  values  ('".$gxid."','".$oxartid."','".$zkatid."','".$oxtime."')";
					$oDb->execute($sQ);
				//	echo "<br> Zkatid=".$zkatid." ArtID=".$oxartid." OXID=".$gxid." Time=".$oxtime;
					$qartid->moveNext();

				$i++;
				}


			}

			$artzuergeniss = "<br> ".$i." Artikel wurden der Neuen Kategorie zugeordnet ";
		}
		else{
			$artzuergeniss = "Kategorie Quell ID nicht vorhanden";
			}




			$artzuergeniss .= "<br>QuellID: ".$varcatq."<br> ZielID: ".$zkatid;
		return $artzuergeniss;
		}

	}
*/    
    
   /*
	public function getArtikelListe($pid="")
	{
 
	$myConfig = $this->getConfig();


		$oDb = oxDb::getDb();
		$query_artlist= "select OXID,OXARTNUM,OXTITLE,OXPARENTID,OXACTIVE  from oxarticles where OXPARENTID = '$pid' order by OXARTNUM";
		//echo "query=".$query_p2cat;

		$aartlis= oxDb::getDb()->Execute( $query_artlist);

		if ($aartlis != false && $aartlis->recordCount() > 0)
		{
			$i =0;
			while (!$aartlis->EOF)
			{

				$oxartid		=	$aartlis->fields[0];
				$oxarnr			=	$aartlis->fields[1];
				$oxartitel		=	$aartlis->fields[2];
				$oxartitelvar	=	$aartlis->fields[3];
				$oxartaktiv		=	$aartlis->fields[4];
				$aartikellist[$i]["id"] = $oxartid;
				$aartikellist[$i]["artnr"] = $oxarnr;
				$aartikellist[$i]["titel"] = $oxartitel;
				$aartikellist[$i]["aktiv"] = $oxartaktiv;

			








				$aartlis->moveNext();
				$i++;

			}

		}

	return $aartikellist;
        
	}
*/
/**/


}