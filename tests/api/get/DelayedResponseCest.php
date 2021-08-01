<?php

class DelayedResponseCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGet('/api/users?delay=3');
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
    }
}
