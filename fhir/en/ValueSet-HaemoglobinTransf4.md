# HGBTransfusion4 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HGBTransfusion4**

## ValueSet: HGBTransfusion4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HaemoglobinTransf4 | *Version*:2.27.1 |
| Active as of 2022-05-16 | *Computable Name*:HaemoglobinTransf4 |

 
Hæmoglobinværdi før blodtransfusion - 4 valg 

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
  "id" : "HaemoglobinTransf4",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HaemoglobinTransf4",
  "version" : "2.27.1",
  "name" : "HaemoglobinTransf4",
  "title" : "HGBTransfusion4",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Hæmoglobinværdi før blodtransfusion - 4 valg",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HaemoglobinTransf4",
      "concept" : [{
        "code" : "hgb_trfGE56",
        "display" : "=>5,6 mmol/L"
      },
      {
        "code" : "hgb_trfGE43",
        "display" : "=>4,3 mmol/L og <5,6 mmol/L"
      },
      {
        "code" : "hgb_trfLT43",
        "display" : "<4,3 mmol/L"
      },
      {
        "code" : "hgb_novalue",
        "display" : "Ikke målt"
      }]
    }]
  }
}

```
