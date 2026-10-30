# Harris Hip Score - Hjælpemidler - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score - Hjælpemidler**

## ValueSet: Harris Hip Score - Hjælpemidler 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreHjaelpemidler | *Version*:2.27.1 |
| Active as of 2022-11-15 | *Computable Name*:HarrisHipScoreHjaelpemidler |

 
Harris Hip Score - Hjælpemidler 

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
  "id" : "HarrisHipScoreHjaelpemidler",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreHjaelpemidler",
  "version" : "2.27.1",
  "name" : "HarrisHipScoreHjaelpemidler",
  "title" : "Harris Hip Score - Hjælpemidler",
  "status" : "active",
  "date" : "2022-11-15T00:00:00+02:00",
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
  "description" : "Harris Hip Score - Hjælpemidler",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSupport",
      "concept" : [{
        "code" : "11",
        "display" : "Ingen"
      },
      {
        "code" : "7",
        "display" : "Én stok ved lange ture"
      },
      {
        "code" : "5",
        "display" : "Næsten altid én stok"
      },
      {
        "code" : "3",
        "display" : "Én albue-/aksilkrykke"
      },
      {
        "code" : "2",
        "display" : "To stokke"
      },
      {
        "code" : "0",
        "display" : "To albue-/aksilkrykker eller rollator"
      }]
    }]
  }
}

```
