# ValueSetLatest - KIP Infrastructure v2.24.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSetLatest**

## SearchParameter: ValueSetLatest 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/ValueSetLatest | *Version*:2.24.0 |
| Active as of 2026-08-05 | *Computable Name*:ValueSetLatest |

 
Search ValueSet for 'latest' extension 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ValueSetLatest",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/ValueSetLatest",
  "version" : "2.24.0",
  "name" : "ValueSetLatest",
  "status" : "active",
  "date" : "2026-08-05T12:29:31+00:00",
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
