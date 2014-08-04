<?php

/**
 *
 * Version:    1.0
 * Author:     Pasquale Pari | Vendingtechnik
 * Author URL: http://www.vendingtechnik.com
 * 
 * License:    GNU GPL 3.0
 * !! it is forbidden to resell this Software !!
 */


class vtec_chf extends vtec_chf_parent
{
    public function getPrice()
    {
     // Währung abrufen und prüfen
     $oMoney = oxRegistry::getConfig()->getActShopCurrencyObject();  // Objekt laden...
     $sMoney = strtoupper($oMoney->name);      // Währungszeichen auslesen und in Grossbuchstaben umwandeln damit evt. 
                                               // Schreibfehler keine Fehler verursachen
                                               
/**  getActShopCurrencyObject Objektinhalt
 * ->rate        Umrechnungsfaktor  
 * ->dec         Dezimalpunktzeichen
 * ->thousand    Tausenderzeichen
 * ->sign        Währungszeichen
 */
                                                 
		
		if($sMoney == "CHF" )   // Währung prüfen...
       { 
        if ( $this->_blNetPriceMode ) {
            return $this->getNettoPrice();
            } 
            else {
            $value = round(($this->getBruttoPrice()+0.000001)*20)/20;
            return $value;
         } 
         }
        else {            // falls nicht obige Bedingung(en), dann nicht runden (Originalfunktion)
          if ( $this->_blNetPriceMode ) {
            return $this->getNettoPrice();
          } else {
            return $this->getBruttoPrice();
          }
         }
     } 
} 