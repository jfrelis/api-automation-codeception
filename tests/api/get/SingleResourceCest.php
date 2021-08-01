<?php

class SingleResourceCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGet('/api/unknown/2');
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
    }
}
