<?php

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->longText('doc');
            $table->string('image');
            $table->string('link')->nullable();
            $table->string('slug');
            $table->boolean('status')->default(true);
            $table->string('type')->default('project');
            $table->string('category');
            $table->foreignIdFor(Client::class, 'client_id')->nullable();
            $table->foreignIdFor(User::class, 'post_by')->nullable();
            $table->foreignIdFor(User::class, 'edit_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
