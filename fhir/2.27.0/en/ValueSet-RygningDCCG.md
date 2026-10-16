# Rygning (DCCG) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Rygning (DCCG)**

## ValueSet: Rygning (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RygningDCCG | *Version*:2.27.0 |
| Active as of 2022-11-08 | *Computable Name*:RygningDCCG |

 
Udfald for rygning 

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
  "id" : "RygningDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RygningDCCG",
  "version" : "2.27.0",
  "name" : "RygningDCCG",
  "title" : "Rygning (DCCG)",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "Udfald for rygning",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Smoking",
      "concept" : [{
        "code" : "smoker",
        "display" : "Ryger (indenfor de seneste 8 uger)"
      },
      {
        "code" : "formersmoker",
        "display" : "Tidligere ryger (ikke røget de seneste 8 uger)"
      },
      {
        "code" : "never-smoker",
        "display" : "Aldrig ryger"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst"
      }]
    }]
  }
}

```
