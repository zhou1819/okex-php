<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Okex\Api\Spot;

use Lin\Okex\Request;

class Instruments extends Request
{
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/spot/v3/instruments';
        $this->data=$data;
        
        return $this->exec();
    }
    
    public function getBook(array $data){
        $this->type='GET';
        $this->path='/api/spot/v3/instruments/'.$data['instrument_id'].'/book';
        unset($data['instrument_id']);
        
        $this->data=$data;
        
        return $this->exec();
    }
    
    /**
     * GET /api/spot/v3/instruments/ticker
     * */
    public function getTickerAll(array $data){
        $this->type='GET';
        $this->path='/api/spot/v3/instruments/ticker';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     * GET /api/spot/v3/instruments/<instrument-id>/ticker
     * */
    public function getTicker(array $data){
        $this->type='GET';
        $this->path='/api/spot/v3/instruments/'.$data['instrument_id'].'/ticker';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
    *GET /api/spot/v3/instruments/<instrument_id>/trades
    * */
    public function getTrades(array $data){
        $this->type='GET';
        $this->path='/api/spot/v3/instruments/'.$data['instrument_id'].'/trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /api/spot/v3/instruments/<instrument_id>/candles
     * */
    public function getCandles(array $data){
        $this->type='GET';
        $this->path='/api/spot/v3/instruments/'.$data['instrument_id'].'/candles';
        $this->data=$data;
        return $this->exec();
    }
}