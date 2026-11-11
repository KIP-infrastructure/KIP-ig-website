# Behandling af tværsnit - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandling af tværsnit**

## ValueSet: Behandling af tværsnit 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentCrossSection | *Version*:2.27.3 |
| Active as of 2022-12-07 | *Computable Name*:TreatmentCrossSection |

 
Hvilken type af tværsnit behandling blev valg 

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
  "id" : "TreatmentCrossSection",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentCrossSection",
  "version" : "2.27.3",
  "name" : "TreatmentCrossSection",
  "title" : "Behandling af tværsnit",
  "status" : "active",
  "date" : "2022-12-07T00:00:00+02:00",
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
  "description" : "Hvilken type af tværsnit behandling blev valg",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "BWG",
        "display" : "Strålebehandling"
      },
      {
        "code" : "BWHA",
        "display" : "Cytostatika"
      },
      {
        "code" : "BOHJ1",
        "display" : "Antistof"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType",
      "concept" : [{
        "code" : "operation",
        "display" : "Operation"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      }]
    }]
  }
}

```
