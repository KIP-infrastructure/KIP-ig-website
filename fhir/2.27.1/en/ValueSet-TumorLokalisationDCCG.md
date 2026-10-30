# Primærtumors lokalisation DCCG - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Primærtumors lokalisation DCCG**

## ValueSet: Primærtumors lokalisation DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TumorLokalisationDCCG | *Version*:2.27.1 |
| Active as of 2022-09-07 | *Computable Name*:TumorLokalisationDCCG |

 
Primærtumors lokalisation DCCG 

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
  "id" : "TumorLokalisationDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TumorLokalisationDCCG",
  "version" : "2.27.1",
  "name" : "TumorLokalisationDCCG",
  "title" : "Primærtumors lokalisation DCCG",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Primærtumors lokalisation DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "DC180",
        "display" : "Caecum"
      },
      {
        "code" : "DC182",
        "display" : "Colon ascendens"
      },
      {
        "code" : "DC183",
        "display" : "Højre colon fleksur"
      },
      {
        "code" : "DC184",
        "display" : "Colon transversum"
      },
      {
        "code" : "DC185",
        "display" : "Venstre colon fleksur"
      },
      {
        "code" : "DC186",
        "display" : "Colon descendens"
      },
      {
        "code" : "DC187",
        "display" : "Colon sigmoideum"
      },
      {
        "code" : "DC189",
        "display" : "Colon UNS"
      }]
    }]
  }
}

```
