# Diagnose DMPN - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Diagnose DMPN**

## ValueSet: Diagnose DMPN 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DiagnoseDMPN | *Version*:2.27.1 |
| Active as of 2022-07-14 | *Computable Name*:DiagnoseDMPN |

 
Uspecificerede diagnoser - DMPN 

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
  "id" : "DiagnoseDMPN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DiagnoseDMPN",
  "version" : "2.27.1",
  "name" : "DiagnoseDMPN",
  "title" : "Diagnose DMPN",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Uspecificerede diagnoser - DMPN",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "chronic_myeloid_leukemia",
        "display" : "Kronisk Myeloid Leukæmi (BCR-ABL1 positiv) (CML)"
      },
      {
        "code" : "polycythemia_vera",
        "display" : "Polycytæmia vera"
      },
      {
        "code" : "primary",
        "display" : "Primær Myelofibrose"
      },
      {
        "code" : "prefibrotic",
        "display" : "Præfibrotisk Myelofibrose"
      },
      {
        "code" : "essential_thrombocytosis",
        "display" : "Essentiel thrombocytose"
      },
      {
        "code" : "myeloproliferative_unclassified",
        "display" : "Uklassificerbar Myeloproliferativ sygdom"
      }]
    }]
  }
}

```
