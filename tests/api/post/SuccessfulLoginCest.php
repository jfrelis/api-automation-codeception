<?php

class SuccessfulLoginCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPost('/api/login', [
            'email' => 'eve.holt@reqres.in',
            'password' => 'cityslicka'
        ]);
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"token": "QpwL5tke4Pnpja7X4"}');
    }
}
