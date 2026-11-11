# Molecular remission (MR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Molecular remission (MR)**

## ValueSet: Molecular remission (MR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MolecularRemission | *Version*:2.27.2 |
| Active as of 2022-07-18 | *Computable Name*:MolecularRemission |

 
Molekylær remission (MR) 

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
  "id" : "MolecularRemission",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MolecularRemission",
  "version" : "2.27.2",
  "name" : "MolecularRemission",
  "title" : "Molecular remission (MR)",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Molekylær remission (MR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MolecularRemission",
      "concept" : [{
        "code" : "mr_4",
        "display" : "MR4"
      },
      {
        "code" : "mr_4.5",
        "display" : "MR4.5"
      },
      {
        "code" : "mr_5",
        "display" : "MR5"
      }]
    }]
  }
}

```
