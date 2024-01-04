function submitSearch() {
  var propertyID = document.getElementById("propertyID").value;
  window.location.href = `../Property/propertySearchResult.php?searchID=${propertyID}&p_status=2`;
}
