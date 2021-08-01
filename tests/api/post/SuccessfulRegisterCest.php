<?php

class SuccessfulRegisterCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPost('/api/register', [
            'email' => 'eve.holt@reqres.in',
            'password' => 'pistol'
        ]);
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('{
            "id": 4,
            "token": "QpwL5tke4Pnpja7X4"
        }');
    }
}
