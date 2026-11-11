# Banff Classifikation - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Banff Classifikation**

## ValueSet: Banff Classifikation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BanffClassifikation | *Version*:2.27.2 |
| Active as of 2024-10-01 | *Computable Name*:BanffClassifikation |

 
Banff Classifikation(DNSL) 

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
  "id" : "BanffClassifikation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BanffClassifikation",
  "version" : "2.27.2",
  "name" : "BanffClassifikation",
  "title" : "Banff Classifikation",
  "status" : "active",
  "date" : "2024-10-01T00:00:00+02:00",
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
  "description" : "Banff Classifikation(DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BANFF",
      "concept" : [{
        "code" : "Borderline",
        "display" : "Borderline"
      },
      {
        "code" : "1A",
        "display" : "1A"
      },
      {
        "code" : "1B",
        "display" : "1B"
      },
      {
        "code" : "2A",
        "display" : "2A"
      },
      {
        "code" : "2B",
        "display" : "2B"
      },
      {
        "code" : "3",
        "display" : "3"
      },
      {
        "code" : "InsufBiopsi",
        "display" : "Insufficient biopsi"
      },
      {
        "code" : "AntistofMedi",
        "display" : "Antistof-medieret"
      }]
    }]
  }
}

```
