<?php

class ListUsersCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGet('/users?page=2');
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
    }
}
