<?php

class PatchUserCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPatch('/api/users/2', [
            'name' => 'morpheus',
            'job' => 'zion resident'
        ]);
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
    }
}
