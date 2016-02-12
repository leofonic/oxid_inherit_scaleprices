<?php
class inherit_scaleprice_oxamountpricelist extends inherit_scaleprice_oxamountpricelist_parent
{
    protected function _loadFromDb()
    {
        $blVariantInheritAmountPrice = $this->getConfig()->getConfigParam('blVariantInheritAmountPrice');
        if ($this->getArticle()->getParentId() && $blVariantInheritAmountPrice){
            $this->getConfig()->setConfigParam('blVariantInheritAmountPrice' , false);
            $aData = parent::_loadFromDb();
            $this->getConfig()->setConfigParam('blVariantInheritAmountPrice' , $blVariantInheritAmountPrice);
            if (count($aData)) return $aData;
        }
        return parent::_loadFromDb();
    }
}