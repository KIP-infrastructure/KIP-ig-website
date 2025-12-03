# Klinisk N-kategori DCCG - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Klinisk N-kategori DCCG**

## ValueSet: Klinisk N-kategori DCCG (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NKategoriDCCG | *Version*:2.15.0 |
| Active as of 2022-11-08 | *Computable Name*:NKategoriDCCG |

 
Klinisk N-kategori DCCG 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "NKategoriDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NKategoriDCCG",
  "version" : "2.15.0",
  "name" : "NKategoriDCCG",
  "title" : "Klinisk N-kategori DCCG",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "Klinisk N-kategori DCCG",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "AZCD30",
            "display" : "N0 (Ingen regionale lymfeknudemetastaser)"
          },
          {
            "code" : "AZCD31",
            "display" : "N1 (1-3 regionale lymfeknudemetastaser)"
          },
          {
            "code" : "AZCD32",
            "display" : "N2 (>3 regionale lymfeknudemetastaser)"
          },
          {
            "code" : "AZCD39",
            "display" : "Nx (N-kategorien er ikke vurderet)"
          }
        ]
      }
    ]
  }
}

```
