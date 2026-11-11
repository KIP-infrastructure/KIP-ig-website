# Revision (DHR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision (DHR)**

## ValueSet: Revision (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionDHR | *Version*:2.27.3 |
| Active as of 2022-11-08 | *Computable Name*:RevisionDHR |

 
Revision (DHR) 

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
  "id" : "RevisionDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionDHR",
  "version" : "2.27.3",
  "name" : "RevisionDHR",
  "title" : "Revision (DHR)",
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
  "description" : "Revision (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "total_replacement",
        "display" : "Alternativ 1: Total udskiftning"
      },
      {
        "code" : "partial_replacement",
        "display" : "Alternativ 2: Delvis udskiftning"
      },
      {
        "code" : "removed",
        "display" : "Alternativ 3: Protesefjernelse"
      },
      {
        "code" : "inserted",
        "display" : "Alternativ 4: Proteseindsættelse efter Girdlestone eller cementspacer"
      }]
    }]
  }
}

```
