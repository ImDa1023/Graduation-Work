<template>
  <div>
    <h1>Form</h1>

    <label>曲名</label>
    <input type="text" placeholder="曲名を追加" />

    <label>アーティスト</label>
    <input type="text" placeholder="アーティストを追加" />

    <label>作曲者</label>
    <input type="text" placeholder="作曲者を追加" />

    <label>編集者</label>
    <input type="text" placeholder="編集者を追加" />

    <label>出版社</label>
    <input type="text" placeholder="出版社を追加" />
  </div>
</template>

<!--formタグを使うにはphpとの連携が必要な為、現状はinputタグのみで作成-->

<style>
input {
  border: none;
  border-bottom: bold 1px;
  margin-bottom: 5px;
  background: none;
}
</style>