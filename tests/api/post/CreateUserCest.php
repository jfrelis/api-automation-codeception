<?php

class CreateUserCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPost('/api/users', [
            'name' => 'morpheus',
            'job' => 'leader'
        ]);
        $I->seeResponseCodeIs(201); //status response = 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"name": "morpheus","job": "leader","id": "647","updatedAt": "2021-08-01T07:30:09.147Z"}');
    }
}
