# Medicin præparat (DSR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicin præparat (DSR)**

## ValueSet: Medicin præparat (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MedicinPraeparatDSR | *Version*:2.27.0 |
| Active as of 2022-10-06 | *Computable Name*:MedicinPraeparatDSR |

 
Medicin præparat (DSR) 

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
  "id" : "MedicinPraeparatDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MedicinPraeparatDSR",
  "version" : "2.27.0",
  "name" : "MedicinPraeparatDSR",
  "title" : "Medicin præparat (DSR)",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Medicin præparat (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Medicine",
      "concept" : [{
        "code" : "antibiotics",
        "display" : "Lokal antibiotika (ekskl.cement), angiv præparat nedenfor"
      },
      {
        "code" : "penicillin",
        "display" : "Penicillin"
      },
      {
        "code" : "penicillinase_stabile",
        "display" : "Penicillinase stabilt penicillin (dicloxacillin)"
      },
      {
        "code" : "cephalosporin",
        "display" : "Cefalosporin"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
