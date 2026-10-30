# pTNM type - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **pTNM type**

## ValueSet: pTNM type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PTNMtype | *Version*:2.27.1 |
| Active as of 2022-06-08 | *Computable Name*:PTNMtype |

 
Typen af pTNM klassifikationen 

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
  "id" : "PTNMtype",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PTNMtype",
  "version" : "2.27.1",
  "name" : "PTNMtype",
  "title" : "pTNM type",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Typen af pTNM klassifikationen",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PTNMType",
      "concept" : [{
        "code" : "ptnm",
        "display" : "pTNM"
      },
      {
        "code" : "yptnm",
        "display" : "ypTNM"
      }]
    }]
  }
}

```
