// automatically generated, do not modify

package NamespaceA;

import java.nio.*;
import java.lang.*;
import java.util.*;
import com.google.flatbuffers.*;

@SuppressWarnings("unused")
public final class SecondTableInA extends Table {
  public static SecondTableInA getRootAsSecondTableInA(ByteBuffer _bb) { return getRootAsSecondTableInA(_bb, new SecondTableInA()); }
  public static SecondTableInA getRootAsSecondTableInA(ByteBuffer _bb, SecondTableInA obj) { _bb.order(ByteOrder.LITTLE_ENDIAN); return (obj.__init(_bb.getInt(_bb.position()) + _bb.position(), _bb)); }
  public SecondTableInA __init(int _i, ByteBuffer _bb) { bb_pos = _i; bb = _bb; return this; }

  public NamespaceC.TableInC referToC() { return referToC(new NamespaceC.TableInC()); }
  public NamespaceC.TableInC referToC(NamespaceC.TableInC obj) { int o = __offset(4); return o != 0 ? obj.__init(__indirect(o + bb_pos), bb) : null; }

  public static int createSecondTableInA(FlatBufferBuilder builder,
      int refer_to_cOffset) {
    builder.startObject(1);
    SecondTableInA.addReferToC(builder, refer_to_cOffset);
    return SecondTableInA.endSecondTableInA(builder);
  }

  public static void startSecondTableInA(FlatBufferBuilder builder) { builder.startObject(1); }
  public static void addReferToC(FlatBufferBuilder builder, int referToCOffset) { builder.addOffset(0, referToCOffset, 0); }
  public static int endSecondTableInA(FlatBufferBuilder builder) {
    int o = builder.endObject();
    return o;
  }
};

