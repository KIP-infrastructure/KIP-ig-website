# Acetabulum knogletab klassifikation (DHR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Acetabulum knogletab klassifikation (DHR)**

## ValueSet: Acetabulum knogletab klassifikation (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AcetabulumKnogletabKlassifikationDHR | *Version*:2.27.1 |
| Active as of 2022-11-08 | *Computable Name*:AcetabulumKnogletabKlassifikationDHR |

 
Acetabulum knogletab klassifikation (DHR) 

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
  "id" : "AcetabulumKnogletabKlassifikationDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AcetabulumKnogletabKlassifikationDHR",
  "version" : "2.27.1",
  "name" : "AcetabulumKnogletabKlassifikationDHR",
  "title" : "Acetabulum knogletab klassifikation (DHR)",
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
  "description" : "Acetabulum knogletab klassifikation (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BoneLossAcetabulumFemurClassification",
      "concept" : [{
        "code" : "acetabulum_type_1",
        "display" : "Type I"
      },
      {
        "code" : "acetabulum_type_2",
        "display" : "Type II"
      },
      {
        "code" : "acetabulum_type_3",
        "display" : "Type III"
      },
      {
        "code" : "acetabulum_type_4",
        "display" : "Type IV"
      },
      {
        "code" : "acetabulum_type_5",
        "display" : "Type V"
      }]
    }]
  }
}

```
