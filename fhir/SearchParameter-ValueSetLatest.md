# ValueSetLatest - KIP Infrastructure v2.26.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSetLatest**

## SearchParameter: ValueSetLatest 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/ValueSetLatest | *Version*:2.26.0 |
| Active as of 2026-09-09 | *Computable Name*:ValueSetLatest |

 
Search ValueSet for 'latest' extension 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ValueSetLatest",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/ValueSetLatest",
  "version" : "2.26.0",
  "name" : "ValueSetLatest",
  "status" : "active",
  "date" : "2026-09-09T13:53:50+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Search ValueSet for 'latest' extension",
  "code" : "latest",
  "base" : ["ValueSet"],
  "type" : "token",
  "expression" : "ValueSet.extension.where(url='latest').value",
  "comparator" : ["eq"]
}

```
