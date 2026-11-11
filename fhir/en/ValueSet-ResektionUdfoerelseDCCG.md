# Udførelse af resektion DCCG - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udførelse af resektion DCCG**

## ValueSet: Udførelse af resektion DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ResektionUdfoerelseDCCG | *Version*:2.27.3 |
| Active as of 2022-09-07 | *Computable Name*:ResektionUdfoerelseDCCG |

 
Udførelse af resektion DCCG 

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
  "id" : "ResektionUdfoerelseDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ResektionUdfoerelseDCCG",
  "version" : "2.27.3",
  "name" : "ResektionUdfoerelseDCCG",
  "title" : "Udførelse af resektion DCCG",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Udførelse af resektion DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ResectionCompletion",
      "concept" : [{
        "code" : "missing_radicality_sektion",
        "display" : "Manglende radikalitet af endoskopiske lokalresektion"
      },
      {
        "code" : "undeterminable_radicality_piecemeal",
        "display" : "Radikalitet af lokalresektionen kan ikke vurderes på grund af piecemeal teknik"
      },
      {
        "code" : "pathology_risk_factors",
        "display" : "Tilstedeværelse af en eller flere patologirisikofaktorer"
      },
      {
        "code" : "missing_radicality_risk",
        "display" : "Manglende radikalitet og tilstedeværelse af risikofaktorer"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden begrundelse inkl. patientønske"
      }]
    }]
  }
}

```
