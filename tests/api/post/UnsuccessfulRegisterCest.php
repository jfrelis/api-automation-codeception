<?php

class UnsuccessfulRegisterCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPost('/api/users', [
            'email' => 'peter@klaven'
        ]);
        $I->seeResponseCodeIs(400); //status response = 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"error": "Missing password"}');
    }
}
