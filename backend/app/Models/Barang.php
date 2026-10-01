public function up(): void
{
    Schema::create('barangs', function (Blueprint $table) {
        $table->id();
        $table->string('kode_barang')->unique();
        $table->string('nama_barang');
        $table->integer('stok')->default(0);
        $table->string('kondisi');
        $table->text('keterangan')->nullable();
        $table->timestamps();
    });
}