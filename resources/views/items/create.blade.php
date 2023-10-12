<form>
    @csrf
    <div>
        <label for="name">Name</label>
        <input name="name"/>
    </div>
    <div>
        <label for="name">Description</label>
        <textarea name="description"></textarea>
    </div>
    <button>Save</button>
</form>
