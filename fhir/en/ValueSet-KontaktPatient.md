# Kontakt til patienten - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kontakt til patienten**

## ValueSet: Kontakt til patienten 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KontaktPatient | *Version*:2.27.0 |
| Active as of 2024-02-21 | *Computable Name*:KontaktPatient |

 
Kontakt til patienten 

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
  "id" : "KontaktPatient",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KontaktPatient",
  "version" : "2.27.0",
  "name" : "KontaktPatient",
  "title" : "Kontakt til patienten",
  "status" : "active",
  "date" : "2024-02-21T00:00:00+02:00",
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
  "description" : "Kontakt til patienten",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ContactPatient",
      "concept" : [{
        "code" : "interview",
        "display" : "Gennemført interview/undersøgelse"
      },
      {
        "code" : "ikke-etableret",
        "display" : "Kontakt forsøgt, men ikke opnået"
      },
      {
        "code" : "PRO_spg",
        "display" : "PRO-spørgeskema sendt til patienten via Digital Post"
      }]
    }]
  }
}

```
