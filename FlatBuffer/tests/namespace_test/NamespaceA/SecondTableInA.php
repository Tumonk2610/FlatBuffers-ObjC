<?php
// automatically generated, do not modify

namespace NamespaceA;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class SecondTableInA extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return SecondTableInA
     */
    public static function getRootAsSecondTableInA(ByteBuffer $bb)
    {
        $obj = new SecondTableInA();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return SecondTableInA
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getReferToC()
    {
        $obj = new TableInC();
        $o = $this->__offset(4);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startSecondTableInA(FlatBufferBuilder $builder)
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return SecondTableInA
     */
    public static function createSecondTableInA(FlatBufferBuilder $builder, $refer_to_c)
    {
        $builder->startObject(1);
        self::addReferToC($builder, $refer_to_c);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addReferToC(FlatBufferBuilder $builder, $referToC)
    {
        $builder->addOffsetX(0, $referToC, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endSecondTableInA(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
