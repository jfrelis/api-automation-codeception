<?php

class SingleUserCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGet('/api/users/2');
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
    }
}
