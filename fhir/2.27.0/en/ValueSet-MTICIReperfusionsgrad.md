# mTICI reperfusionsgrad - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **mTICI reperfusionsgrad**

## ValueSet: mTICI reperfusionsgrad 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MTICIReperfusionsgrad | *Version*:2.27.0 |
| Active as of 2022-06-28 | *Computable Name*:MTICIReperfusionsgrad |

 
Reperfusionsgrad ved brug af Modified treatment in cerebral ischemia (mTICI). 

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
  "id" : "MTICIReperfusionsgrad",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MTICIReperfusionsgrad",
  "version" : "2.27.0",
  "name" : "MTICIReperfusionsgrad",
  "title" : "mTICI reperfusionsgrad",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Reperfusionsgrad ved brug af Modified treatment in cerebral ischemia (mTICI).",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MTICIClassification",
      "concept" : [{
        "code" : "grade0",
        "display" : "Grad 0"
      },
      {
        "code" : "grade1",
        "display" : "Grad 1"
      },
      {
        "code" : "grade2a",
        "display" : "Grad 2a"
      },
      {
        "code" : "grade2b",
        "display" : "Grad 2b"
      },
      {
        "code" : "grade2c",
        "display" : "Grad 2c"
      },
      {
        "code" : "grade3",
        "display" : "Grad 3"
      }]
    }]
  }
}

```
