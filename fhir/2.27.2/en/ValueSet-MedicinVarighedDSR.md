# Medicin varighed (DSR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicin varighed (DSR)**

## ValueSet: Medicin varighed (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MedicinVarighedDSR | *Version*:2.27.2 |
| Active as of 2022-10-06 | *Computable Name*:MedicinVarighedDSR |

 
Medicin varighed (DSR) 

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
  "id" : "MedicinVarighedDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MedicinVarighedDSR",
  "version" : "2.27.2",
  "name" : "MedicinVarighedDSR",
  "title" : "Medicin varighed (DSR)",
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
  "description" : "Medicin varighed (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentDuration",
      "concept" : [{
        "code" : "preoperative_peroperative",
        "display" : "Kun Præ-/peroperativt"
      },
      {
        "code" : "postoperative_1_day",
        "display" : "1 døgn postopr."
      },
      {
        "code" : "postoperative_multiple_days",
        "display" : "Flere døgn postopr."
      }]
    }]
  }
}

```
