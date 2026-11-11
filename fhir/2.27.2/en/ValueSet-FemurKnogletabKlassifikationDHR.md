# Femur knogletab klassifikation (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Femur knogletab klassifikation (DHR)**

## ValueSet: Femur knogletab klassifikation (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FemurKnogletabKlassifikationDHR | *Version*:2.27.2 |
| Active as of 2022-11-08 | *Computable Name*:FemurKnogletabKlassifikationDHR |

 
Femur knogletab klassifikation (DHR) 

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
  "id" : "FemurKnogletabKlassifikationDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FemurKnogletabKlassifikationDHR",
  "version" : "2.27.2",
  "name" : "FemurKnogletabKlassifikationDHR",
  "title" : "Femur knogletab klassifikation (DHR)",
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
  "description" : "Femur knogletab klassifikation (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BoneLossAcetabulumFemurClassification",
      "concept" : [{
        "code" : "femur_type_1",
        "display" : "Type I"
      },
      {
        "code" : "femur_type_2",
        "display" : "Type II"
      },
      {
        "code" : "femur_type_3",
        "display" : "Type III"
      },
      {
        "code" : "femur_type_4",
        "display" : "Type IV"
      },
      {
        "code" : "femur_type_5",
        "display" : "Type V"
      },
      {
        "code" : "femur_type_6",
        "display" : "Type VI"
      }]
    }]
  }
}

```
