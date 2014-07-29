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
     $oMoney = oxRegistry::getConfig()->getActShopCurrencyObject(); 
     $sMoney = strtoupper($oMoney->name);      // Währungszeichen in Grossbuchstaben damit evt. Schreibfehler keine Fehler machen
		
		if($sMoney == "CHF" )
       { 
        if ( $this->_blNetPriceMode ) {
            return $this->getNettoPrice();
            } 
            else {
            $value = round(($this->getBruttoPrice()+0.000001)*20)/20;
            return $value;
         } //ende else
         }
        else {
          if ( $this->_blNetPriceMode ) {
            return $this->getNettoPrice();
          } else {
            return $this->getBruttoPrice();
          }
         }
        } // ende public
} // ende class