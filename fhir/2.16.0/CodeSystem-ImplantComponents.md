# Implant components - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implant components**

## CodeSystem: Implant components 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents | *Version*:2.16.0 |
| Active as of 2022-07-04 | *Computable Name*:ImplantComponents |

 
Implant components 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CaputModulaerTypeDHR](ValueSet-CaputModulaerTypeDHR.md)
* [CaputTypeDHR](ValueSet-CaputTypeDHR.md)
* [CementBlandesystemDHR](ValueSet-CementBlandesystemDHR.md)
* [FiksationCementeretUcementeret](ValueSet-FiksationCementeretUcementeret.md)
* [FiksationCementeretUcementeretAndet](ValueSet-FiksationCementeretUcementeretAndet.md)
* [FiksationCementeretUcementeretHybrid](ValueSet-FiksationCementeretUcementeretHybrid.md)
* [GlenoidalkomponentIkkeIndsatDSR](ValueSet-GlenoidalkomponentIkkeIndsatDSR.md)
* [GlenoidalkomponentSupplerendeDSR](ValueSet-GlenoidalkomponentSupplerendeDSR.md)
* [HumeruskomponentDSR](ValueSet-HumeruskomponentDSR.md)
* [ImplantatAnatomiskDesign](ValueSet-ImplantatAnatomiskDesign.md)
* [ImplantatAnatomiskOffset](ValueSet-ImplantatAnatomiskOffset.md)
* [ImplantatAnatomiskReverse](ValueSet-ImplantatAnatomiskReverse.md)
* [ImplantatMaterialeDSR](ValueSet-ImplantatMaterialeDSR.md)
* [ImplantatMaterialeKeramikMetalAndet](ValueSet-ImplantatMaterialeKeramikMetalAndet.md)
* [ImplantatMaterialePolyethylenKeramikMetal](ValueSet-ImplantatMaterialePolyethylenKeramikMetal.md)
* [ImplantatReverseDesign](ValueSet-ImplantatReverseDesign.md)
* [KnoglegraftDSR](ValueSet-KnoglegraftDSR.md)
* [KnogletransplantationDHR](ValueSet-KnogletransplantationDHR.md)
* [KomponentPatellaDKR](ValueSet-KomponentPatellaDKR.md)
* [KomponentPatellaDKRrevision](ValueSet-KomponentPatellaDKRrevision.md)
* [KomponentPatellaMaterialeDKR](ValueSet-KomponentPatellaMaterialeDKR.md)
* [KomponentSupplementDKR](ValueSet-KomponentSupplementDKR.md)
* [KomponentTibiaStatusDKR](ValueSet-KomponentTibiaStatusDKR.md)
* [KomponentTypeDKR](ValueSet-KomponentTypeDKR.md)
* [KomponentTypeFemurDHR](ValueSet-KomponentTypeFemurDHR.md)
* [KomponentTypeHullerUdenhullerDHR](ValueSet-KomponentTypeHullerUdenhullerDHR.md)
* [LinerCrosslinkedDHR](ValueSet-LinerCrosslinkedDHR.md)
* [LinertypeDHR](ValueSet-LinertypeDHR.md)
* [OsteotomiTypeAlmindeligExtendedDHR](ValueSet-OsteotomiTypeAlmindeligExtendedDHR.md)
* [ProteseFjernelseDHR](ValueSet-ProteseFjernelseDHR.md)
* [ProtesestatusDHR](ValueSet-ProtesestatusDHR.md)
* [RevisionHumerusCavitasDSR](ValueSet-RevisionHumerusCavitasDSR.md)
* [RevisionHumerusKomponentDSR](ValueSet-RevisionHumerusKomponentDSR.md)
* [RevisionUdskiftningDHR](ValueSet-RevisionUdskiftningDHR.md)
* [StemkarakteristikDSR](ValueSet-StemkarakteristikDSR.md)
* [StemlaengdeDSR](ValueSet-StemlaengdeDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ImplantComponents",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
  "version" : "2.16.0",
  "name" : "ImplantComponents",
  "title" : "Implant components",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Implant components",
  "content" : "complete",
  "count" : 79,
  "concept" : [
    {
      "code" : "cement_spacer",
      "display" : "Cement spacer",
      "definition" : "Cement spacer"
    },
    {
      "code" : "implant",
      "display" : "Implant",
      "definition" : "Implant / Implantat"
    },
    {
      "code" : "cavitas_untouched",
      "display" : "Cavitas urørt",
      "definition" : "Cavitas urørt"
    },
    {
      "code" : "cavitas_inforeret",
      "display" : "Cavitas inforeret",
      "definition" : "Cavitas inforeret"
    },
    {
      "code" : "cavitas_reamet",
      "display" : "Cavitas reamet",
      "definition" : "Cavitas reamet"
    },
    {
      "code" : "cavitas_removed",
      "display" : "Cavitas fjernet",
      "definition" : "Cavitas fjernet"
    },
    {
      "code" : "resurfacing",
      "display" : "Resurfacing",
      "definition" : "Resurfacing"
    },
    {
      "code" : "stemless",
      "display" : "Stemless",
      "definition" : "Stemless"
    },
    {
      "code" : "stem",
      "display" : "Stem",
      "definition" : "Stem",
      "concept" : [
        {
          "code" : "standard_length",
          "display" : "Standard length",
          "definition" : "Standard length / Standard længde"
        },
        {
          "code" : "extra_length",
          "display" : "Extra length",
          "definition" : "Extra length / Extra længde"
        },
        {
          "code" : "short_mini_length",
          "display" : "Short/mini",
          "definition" : "Short/mini / Short/mini"
        },
        {
          "code" : "stem_femur",
          "display" : "Stem (femur)",
          "definition" : "Stem (femur)"
        },
        {
          "code" : "stem_tibia",
          "display" : "Stem (tibia)",
          "definition" : "Stem (tibia)"
        }
      ]
    },
    {
      "code" : "augment",
      "display" : "Augment",
      "definition" : "Augment",
      "concept" : [
        {
          "code" : "augment_femur",
          "display" : "Augment (femur)",
          "definition" : "Augment (femur)"
        },
        {
          "code" : "augment_tibia",
          "display" : "Augment (tibia)",
          "definition" : "Augment (tibia)"
        }
      ]
    },
    {
      "code" : "cone_sleeve",
      "display" : "Cone/sleeve",
      "definition" : "Cone/sleeve",
      "concept" : [
        {
          "code" : "cone_sleeve_femur",
          "display" : "Cone/sleeve (femur)",
          "definition" : "Cone/sleeve (femur)"
        },
        {
          "code" : "cone_sleeve_tibia",
          "display" : "Cone/sleeve (tibia)",
          "definition" : "Cone/sleeve (tibia)"
        }
      ]
    },
    {
      "code" : "cemented",
      "display" : "Cemented",
      "definition" : "Cemented / Cementeret"
    },
    {
      "code" : "uncemented",
      "display" : "Uncemented",
      "definition" : "Uncemented / Ucementeret"
    },
    {
      "code" : "hybrid",
      "display" : "Hybrid",
      "definition" : "Hybrid",
      "concept" : [
        {
          "code" : "hybrid_a",
          "display" : "Hybrid A",
          "definition" : "Hybrid A"
        },
        {
          "code" : "hybrid_b",
          "display" : "Hybrid B",
          "definition" : "Hybrid B"
        }
      ]
    },
    {
      "code" : "girdlestone",
      "display" : "Girdlestone",
      "definition" : "Girdlestone"
    },
    {
      "code" : "anatomic",
      "display" : "Anatomic",
      "definition" : "Anatomic / Anatomisk / SNOMED-CT: 36298004",
      "concept" : [
        {
          "code" : "symmetrical",
          "display" : "Symmetrical",
          "definition" : "Symmetrical / Symmetrisk / SNOMED-CT: 255473004"
        },
        {
          "code" : "offset",
          "display" : "Offset",
          "definition" : "Offset"
        },
        {
          "code" : "helplast",
          "display" : "Helplast",
          "definition" : "Helplast"
        },
        {
          "code" : "metalbacked",
          "display" : "Metalbacked"
        }
      ]
    },
    {
      "code" : "reverse",
      "display" : "Reverse",
      "definition" : "Reverse",
      "concept" : [
        {
          "code" : "standard",
          "display" : "Standard",
          "definition" : "Standard"
        },
        {
          "code" : "eccentric",
          "display" : "Excentrisk",
          "definition" : "Excentrisk"
        }
      ]
    },
    {
      "code" : "modular",
      "display" : "Modular",
      "definition" : "Modular / Modulært",
      "concept" : [
        {
          "code" : "firm_neck",
          "display" : "Firm neck",
          "definition" : "Firm neck / Fast hals"
        },
        {
          "code" : "detachable_neck",
          "display" : "Detachable neck",
          "definition" : "Detachable neck / Aftagelig hals"
        }
      ]
    },
    {
      "code" : "adherent",
      "display" : "Adherent",
      "definition" : "Adherent / Fastsiddende"
    },
    {
      "code" : "ordninary",
      "display" : "Ordinary",
      "definition" : "Ordinary / Almindelig"
    },
    {
      "code" : "extended",
      "display" : "Extended",
      "definition" : "Extended"
    },
    {
      "code" : "with_holes",
      "display" : "With holes",
      "definition" : "With holes / Med huller"
    },
    {
      "code" : "without_holes",
      "display" : "Without holes",
      "definition" : "Without holes / Uden huller"
    },
    {
      "code" : "metal",
      "display" : "Metal",
      "definition" : "Metal / SNOMED-CT: 425620007"
    },
    {
      "code" : "metal_pegs",
      "display" : "Metal pegs",
      "definition" : "Metal pegs"
    },
    {
      "code" : "metal_backing",
      "display" : "Metal-backing",
      "definition" : "Metal-backing"
    },
    {
      "code" : "screws",
      "display" : "Skruer",
      "definition" : "Skruer"
    },
    {
      "code" : "augmented",
      "display" : "Augmented",
      "definition" : "Augmented"
    },
    {
      "code" : "polyethylene",
      "display" : "Polyethylene",
      "definition" : "Polyethylene / Polyethylen / SNOMED-CT: 71463006",
      "concept" : [
        {
          "code" : "polyethylene_cool",
          "display" : "Polyethylen køl",
          "definition" : "Polyethylen køl"
        },
        {
          "code" : "polyethylene_pegs",
          "display" : "Polyethylen pegs",
          "definition" : "Polyethylen pegs"
        }
      ]
    },
    {
      "code" : "pyrocarbon",
      "display" : "Pyrocarbon",
      "definition" : "Pyrocarbon"
    },
    {
      "code" : "ceramics",
      "display" : "Ceramics",
      "definition" : "Ceramics / Keramik"
    },
    {
      "code" : "spongiotic",
      "display" : "Spongiotic",
      "definition" : "Spongiotic / Spongiøs"
    },
    {
      "code" : "structural",
      "display" : "Structural",
      "definition" : "Structural / Strukturel"
    },
    {
      "code" : "constrained",
      "display" : "Constrained",
      "definition" : "Constrained"
    },
    {
      "code" : "non_constrained",
      "display" : "Non-constrained",
      "definition" : "Non-constrained / Ikke-constrained"
    },
    {
      "code" : "double_mobility",
      "display" : "Double mobility",
      "definition" : "Double mobility"
    },
    {
      "code" : "non_highy_crosslinked",
      "display" : "Ikke highly-crosslinked",
      "definition" : "Ikke highly-crosslinked"
    },
    {
      "code" : "highly_crosslinked",
      "display" : "Highly crosslinked",
      "definition" : "Highly crosslinked"
    },
    {
      "code" : "highly_crosslinked_antioxidant",
      "display" : "Highly crosslinked med antioxidant (Vitamin E og AOX)",
      "definition" : "Highly crosslinked med antioxidant (Vitamin E og AOX)"
    },
    {
      "code" : "humerus",
      "display" : "Humerus",
      "definition" : "Humerus",
      "concept" : [
        {
          "code" : "liner",
          "display" : "Liner",
          "definition" : "Liner"
        },
        {
          "code" : "caput",
          "display" : "Caput",
          "definition" : "Caput"
        },
        {
          "code" : "component",
          "display" : "Komponent",
          "definition" : "Komponent"
        }
      ]
    },
    {
      "code" : "cavitas",
      "display" : "Cavitas",
      "definition" : "Cavitas"
    },
    {
      "code" : "acetabulum_component",
      "display" : "Acetabulumkomponent",
      "definition" : "Acetabulumkomponent"
    },
    {
      "code" : "acetabulum_liner",
      "display" : "Acetabulumliner",
      "definition" : "Acetabulumliner"
    },
    {
      "code" : "femur_component",
      "display" : "Femurkomponent",
      "definition" : "Femurkomponent"
    },
    {
      "code" : "tibia_component",
      "display" : "Tibiakomponent",
      "definition" : "Tibiakomponent"
    },
    {
      "code" : "patella_component",
      "display" : "Patellakomponent",
      "definition" : "Patellakomponent"
    },
    {
      "code" : "soft_tissue",
      "display" : "Bløddelsrevisioner uden udskiftning af protesekomponenter",
      "definition" : "Bløddelsrevisioner uden udskiftning af protesekomponenter"
    },
    {
      "code" : "polyethylene_change",
      "display" : "Polyethylen-skift (ved revision)",
      "definition" : "Polyethylen-skift (ved revision) (Tibia)"
    },
    {
      "code" : "long",
      "display" : "Long",
      "definition" : "Long / Lang"
    },
    {
      "code" : "dysplasia_prosthesis",
      "display" : "Dysplasia prosthesis",
      "definition" : "Dysplasia prosthesis / Dysplasiprotese"
    },
    {
      "code" : "resection_prosthesis",
      "display" : "Resection prosthesis",
      "definition" : "Resection prosthesis / Resektionsprotese"
    },
    {
      "code" : "open_mixture",
      "display" : "Open mixture",
      "definition" : "Open mixture / Åben blanding af væske og pulver"
    },
    {
      "code" : "closed_mixture",
      "display" : "Closed mixture",
      "definition" : "Closed mixture / Fuldstændig lukket blanding af væske og pulver"
    },
    {
      "code" : "massive_transplant",
      "display" : "Massive transplant",
      "definition" : "Massiv transplantering"
    },
    {
      "code" : "crumble",
      "display" : "Minor crumble",
      "definition" : "Lidt smuld"
    }
  ]
}

```
