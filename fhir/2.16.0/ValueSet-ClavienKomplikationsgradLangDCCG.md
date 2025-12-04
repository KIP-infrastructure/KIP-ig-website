# Clavien komplikationsgrad lang DCCG - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clavien komplikationsgrad lang DCCG**

## ValueSet: Clavien komplikationsgrad lang DCCG (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ClavienKomplikationsgradLangDCCG | *Version*:2.16.0 |
| Active as of 2023-06-20 | *Computable Name*:ClavienKomplikationsgradLangDCCG |

 
Clavien komplikationsgrad lang DCCG 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 8 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ClavienKomplikationsgradLangDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ClavienKomplikationsgradLangDCCG",
  "version" : "2.16.0",
  "name" : "ClavienKomplikationsgradLangDCCG",
  "title" : "Clavien komplikationsgrad lang DCCG",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-06-20T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Clavien komplikationsgrad lang DCCG",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "none",
            "display" : "Ingen"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "ZDA03A1",
            "display" : "Grad 1: Enhver afvigelse fra det normale postoperative forløb uden kirurgisk, endoskopisk, radiologisk eller farmakologisk intervention med undtagelse af\nvæskebehandling, behandling med antiemetika, febernedsættende medicin, smertestillende medicin eller diuretika og fysioterapi. Omfatter\nsårspaltning bed-side og hjerteinsufficiens som udelukkende behandles med diuretika"
          },
          {
            "code" : "ZDA03A2",
            "display" : "Grad 2: Medicinsk behandling inkl. blodtransfusion eller parenteral ernæring, men eksklusiv væskebehandling og behandling med antiemetika,\nfebernedsættende medicin, smertestillende medicin eller diuretika"
          },
          {
            "code" : "ZDA03A3A",
            "display" : "Grad 3a: Komplikation som er behandlet kirurgisk, endoskopisk eller radiologisk (perkutan drænage) behandling uden narkose, men inkl. eventuel rus"
          },
          {
            "code" : "ZDA03A3B",
            "display" : "Grad 3b: Komplikation som er behandlet kirurgisk, endoskopisk eller radiologisk (perkutan drænage) behandling i narkose ekskl. rus"
          },
          {
            "code" : "ZDA03A4A",
            "display" : "Grad 4a: Livstruende komplikation (inkl. CNS) som krævede indlæggelse på en intensiv afdeling, med svigt af et organ (inkl. dialyse)"
          },
          {
            "code" : "ZDA03A4B",
            "display" : "Grad 4b: Livstruende komplikation (inkl. CNS) som krævede indlæggelse på en intensiv afdeling med multiorgansvigt"
          },
          {
            "code" : "ZDA03A5",
            "display" : "Grad 5: Død"
          }
        ]
      }
    ]
  }
}

```
