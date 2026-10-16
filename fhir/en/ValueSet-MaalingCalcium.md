# Måling, calcium - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Måling, calcium**

## ValueSet: Måling, calcium 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MaalingCalcium | *Version*:2.27.0 |
| Active as of 2022-09-19 | *Computable Name*:MaalingCalcium |

 
Måling, calcium 

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
  "id" : "MaalingCalcium",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MaalingCalcium",
  "version" : "2.27.0",
  "name" : "MaalingCalcium",
  "title" : "Måling, calcium",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Måling, calcium",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CalciumType",
      "concept" : [{
        "code" : "albumin_corrected",
        "display" : "Albuminkorrigeret"
      },
      {
        "code" : "ionized",
        "display" : "Ioniseret"
      }]
    }]
  }
}

```
