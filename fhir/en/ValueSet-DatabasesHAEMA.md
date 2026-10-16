# Databaser i HÆMA - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Databaser i HÆMA**

## ValueSet: Databaser i HÆMA 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DatabasesHAEMA | *Version*:2.27.0 |
| Active as of 2023-03-15 | *Computable Name*:DatabasesHAEMA |

 
Databaser i HÆMA 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DatabasesHAEMA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DatabasesHAEMA",
  "version" : "2.27.0",
  "name" : "DatabasesHAEMA",
  "title" : "Databaser i HÆMA",
  "status" : "active",
  "date" : "2023-03-15T00:00:00+02:00",
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
  "description" : "Databaser i HÆMA",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DatabasesKIP",
      "concept" : [{
        "code" : "ALD",
        "display" : "ALD"
      },
      {
        "code" : "DAMYDA",
        "display" : "DAMYDA"
      },
      {
        "code" : "MDS",
        "display" : "MDS"
      }]
    }]
  }
}

```
