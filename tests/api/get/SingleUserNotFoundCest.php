<?php

class SingleUserNotFoundCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGet('/api/users/23');
        $I->seeResponseCodeIs(404); //status response = 200
        $I->seeResponseIsJson();
    }
}
