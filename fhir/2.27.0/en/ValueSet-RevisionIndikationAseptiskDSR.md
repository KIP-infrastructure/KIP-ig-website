# Revision, indikation - Aseptisk løsning (DSR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, indikation - Aseptisk løsning (DSR)**

## ValueSet: Revision, indikation - Aseptisk løsning (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationAseptiskDSR | *Version*:2.27.0 |
| Active as of 2022-10-07 | *Computable Name*:RevisionIndikationAseptiskDSR |

 
Revision, indikation - Aseptisk løsning (DSR) 

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
  "id" : "RevisionIndikationAseptiskDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationAseptiskDSR",
  "version" : "2.27.0",
  "name" : "RevisionIndikationAseptiskDSR",
  "title" : "Revision, indikation - Aseptisk løsning (DSR)",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Revision, indikation - Aseptisk løsning (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionIndication",
      "concept" : [{
        "code" : "glenoid",
        "display" : "Glenoid"
      },
      {
        "code" : "humerus",
        "display" : "Humerus"
      }]
    }]
  }
}

```
