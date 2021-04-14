<?php

$tv = new Television();
$tv->setChannel(5);

class Television{
  private $channelNo;

  private function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }

  public function setChannel($channel){
    $this->channelNo = $channel;
    $this->dispChannel();
  }
}