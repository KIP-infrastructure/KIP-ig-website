# Hernie størrelse - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hernie størrelse**

## ValueSet: Hernie størrelse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HernieStoerrelse | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:HernieStoerrelse |

 
Hernie størrelse 

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
  "id" : "HernieStoerrelse",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HernieStoerrelse",
  "version" : "2.27.1",
  "name" : "HernieStoerrelse",
  "title" : "Hernie størrelse",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Hernie størrelse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HerniaSize",
      "concept" : [{
        "code" : "<1",
        "display" : "<1 finger"
      },
      {
        "code" : "1",
        "display" : "1 finger"
      },
      {
        "code" : "2",
        "display" : "2 fingre"
      },
      {
        "code" : ">=3",
        "display" : ">=3 fingre"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Ukendt"
      }]
    }]
  }
}

```
