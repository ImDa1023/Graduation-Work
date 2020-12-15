<template>
  <div>
    <h1>Add_Form</h1>

    <div class="tamesi">
      <label>曲名</label>
      <input type="text" placeholder="曲名を追加" />
    </div>

    <div class="tamesi">
      <label>アーティスト</label>
      <input type="text" placeholder="アーティストを追加" />
    </div>

    <div class="tamesi">
      <label>作曲者</label>
      <input type="text" placeholder="作曲者を追加" />
    </div>

    <div class="tamesi">
      <label>編集者</label>
      <input type="text" placeholder="編集者を追加" />
    </div>

    <div class="tamesi">
      <label>出版社</label>
      <input type="text" placeholder="出版社を追加" />
    </div>
  </div>
</template>

<!--formタグを使うにはphpとの連携が必要な為、現状はinputタグのみで作成-->

<style>
label {
  font-size: 2rem;
  width: 200px;
  margin-right: 10%;
}

input {
  border: none;
  border-bottom: bold 1px;
  margin-bottom: 5px;
  background: none;
  font-size: 1.3rem;
}
</style>