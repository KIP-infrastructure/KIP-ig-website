# Ann Arbor gradering klassifikation - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ann Arbor gradering klassifikation**

## ValueSet: Ann Arbor gradering klassifikation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnnArborStagingClassification | *Version*:2.27.3 |
| Active as of 2022-07-12 | *Computable Name*:AnnArborStagingClassification |

 
Ann Arbor er en gradering klassifikation til Hodgkins desease 

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
  "id" : "AnnArborStagingClassification",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnnArborStagingClassification",
  "version" : "2.27.3",
  "name" : "AnnArborStagingClassification",
  "title" : "Ann Arbor gradering klassifikation",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Ann Arbor er en gradering klassifikation til Hodgkins desease",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnnArborStagingClassification",
      "concept" : [{
        "code" : "stage_1",
        "display" : "1 (A, B el. E)"
      },
      {
        "code" : "stage_2",
        "display" : "2 (A, B el. E)"
      },
      {
        "code" : "stage_3",
        "display" : "3 (A, B el. E)"
      },
      {
        "code" : "stage_4",
        "display" : "4 (A, B el. E)"
      }]
    }]
  }
}

```
