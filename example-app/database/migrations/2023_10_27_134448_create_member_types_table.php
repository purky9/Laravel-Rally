    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up() {
            Schema::create('member_types', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedInteger('minSelections');
                $table->unsignedInteger('maxSelections');
                $table->timestamps();
            });
    
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('member_types');
        }
    };
