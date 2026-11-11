# Tiltag i forbindelse med vasospasmer - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tiltag i forbindelse med vasospasmer**

## ValueSet: Tiltag i forbindelse med vasospasmer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VasospasmerTiltag | *Version*:2.27.3 |
| Active as of 2022-06-29 | *Computable Name*:VasospasmerTiltag |

 
Tiltag i forbindelse med vasospasmer 

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
  "id" : "VasospasmerTiltag",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VasospasmerTiltag",
  "version" : "2.27.3",
  "name" : "VasospasmerTiltag",
  "title" : "Tiltag i forbindelse med vasospasmer",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Tiltag i forbindelse med vasospasmer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentInitiatives",
      "concept" : [{
        "code" : "oxygenmonitoring",
        "display" : "Intracerebral iltmonitorering"
      },
      {
        "code" : "hypertensiontreatment",
        "display" : "Hypertensionsbehandling"
      },
      {
        "code" : "endovascularmedical",
        "display" : "Endovaskulær medicinsk behandling"
      },
      {
        "code" : "endovascularmechanical",
        "display" : "Endovaskulær mekanisk behandling"
      }]
    }]
  }
}

```
